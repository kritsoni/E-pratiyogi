// $(document).ready(function(){

//     $("#createsubjects").click(function(){
//         $("html,body,nav,.card").addClass("disabled");
//         $("#subjectsdialog").addClass("enabled");
//         $("#subjectsdialog").show();
//     });

//     var closebtns = document.getElementsByClassName("close");
//     var i;

//     for (i = 0; i < closebtns.length; i++) {
//     closebtns[i].addEventListener("click", function() {
//         this.parentElement.style.display = 'none';
//         $("html,body,nav,.card").removeClass("disabled");
//         //  $("#tagsdialog").addClass("disabled");
//         $("#tagsdialog").hide();
        
//     });
//     }

//     $("#createtagindb").click(function(){
//         name = $("#topic").val();
                
//         $.ajax({
//             type:'GET',
//             url:"/createtag",
//             data: { 
//                 'name': name ,
//                 _token : $('meta[name="csrf-token"]').attr('content')
//             },
//             headers: {
//                 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
//             },
            
//             success:function(data){
//                 //alert("Successfully added new topic :"+data[1]);
//                 $("html,body,nav,.card").removeClass("disabled");
//                 $("#tagsdialog").hide();
//                 location.reload(true);
//             },
//             error:function(){
//                 alert("An error has occured !");
//             } 
//          });
        
//     });
// });