
function showdata() {
    $.ajax({
        url: "action.php",  
        type: "POST",       
        data: {
            dataget: "dataget"  
        },
        dataType: "json",  
        success: function(data) {
        
            let rowData = data.data;
            // console.log(rowData); 

           
            let tbody = document.getElementById("tbodytable");
            tbody.innerHTML = "";  
          
            rowData.forEach(row => {
                // console.log(row);  

                
                $(tbody).append(`
                    <tr>
                        <td>${row.id}</td>
                        <td>${row.full_name}</td>
                        <td>${row.phone}</td>
                        <td>${row.email}</td>
                        <td>${row.password}</td>
                        <td><button class='btn-del text-light bg-danger hover cursor-pointer' data=${row.id} onclick="del(${row.id})">
                            Delete
                            </button>
                        </td>
                        <td> <button class="btn-edit text-light bg-warning hover cursor-pointer" data=${row.id} onclick="edit(${row.id})">
                            Edit
                            </button>
                        </td>
                        
                    </tr>
                `);
            });
        },
        error: function(error) {
            
            console.log("An error occurred: " + error);
        }
    });
}

showdata();


// $(document).ready(function(){
//     $('.delete-btn').click(function(e){
//         e.preventDefault();   
//         var deleteId = $(this).attr('id');
//         // alert(deleteId); 
//         if (confirm("Are you sure you want to delete this item?"+deleteId)) {
            
//             $.ajax({
//                 type: "POST",
//                 url: "action.php",
//                 data: { uresid: deleteId }, 
//                 success: function(response) {
                    
//                     alert("Item deleted successfully.");
                    
//                     $("#" + deleteId).closest("tr").remove(); 
//                 },
//                 error: function(xhr, status, error) {
                    
//                     alert("Error deleting item: " + error);
//                 }
//             });
//         }
//     });
// });

// $(document).ready(function(){
//     $('.edit-btn').click(function(e){

//         e.preventDefault();
//         // $("#resedti").show();
        
        
//         var editId = $(this).attr('id');
        
//         alert(editId);
//         // $.post("action.php",{editId},function(data){
//         //     alert(data);
//         // })
       
//     })
// });

$(document).ready(function () {
    // $("#resedti").hide();

    $('#frm').submit(function (e) {
        e.preventDefault();
                var frmData = $("#frm").serialize();


        frm = document.getElementById("frm");
     
        $.post("action.php", frmData, function (response) {


            console.log("THis is from success block")
            console.log(response);
            // $("#resedti").hide();



            $("#res").html(response.message); frm.reset();
            showdata();

        }, "json").fail(error => {
            console.log("This is error block")
            console.log(error)
            console.log(error.responseText)
        })
    })

    // $('btn-del').click(function(e){
    //     // e.preventDefault();   
    //     var deleteId = $(this).attr('data');
    //     // alert(deleteId); 
    //     if (confirm("Are you sure you want to delete this item?"+deleteId)) {
            
    //         $.ajax({
    //             type: "POST",
    //             url: "action.php",
    //             data: { uresid: deleteId }, 
    //             success: function(response) {
                    
    //                 alert("Item deleted successfully.");
                    
    //                 $("#" + deleteId).closest("tr").remove(); 
    //             },
    //             error: function(xhr, status, error) {
                    
    //                 alert("Error deleting item: " + error);
    //             }
    //         });
    //     }
    // });

    // $('.btn-edit').click(function(e){

    //     // e.preventDefault();
    //     // $("#resedti").show();
        
        
    //     var editId = $(this).attr('data');
        
    //     alert(editId);
    //     // $.post("action.php",{editId},function(data){
    //     //     alert(data);
    //     // })
       
    // })


});

function edit(editId)
{

    $.post("action.php",{editId}, function(res){
     
        // alert(res.data.id)
        $("#full_name").val(res.data.full_name);
        $("#email").val(res.data.email);
        $("#password").val(res.data.password);
        $("#phone").val(res.data.phone);


     },"json")
}



function del(deleteId)
{
    if (confirm("Are you sure you want to delete this item?"+deleteId)) 
    {
     $.post("action.php",{deleteId}, function(res){
        alert(`Item ${deleteId} deleted successfully.`);
        showdata();
     })
    }    
    
}




    

