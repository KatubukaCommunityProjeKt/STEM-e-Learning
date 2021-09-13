$(document).ready(()=>{
 
    $.ajax({
      contentType:'application/json',
      url:'http://localhost/STEM%20e-learning/src/assets/php/backend.php',
      dataType:'json',
      type:'post',
      async:true,
      data:{Aname:'po'},
      success:function (data){ 
          for(let i=0; i<data.length; i++)
          {
            var datas =`
        <div class="col-lg-3 col-md-6 col-ms-12 card bg-primary text-white m-1" style="width:300px; height:400px">
            <div class="card-body">
               <h5 class="card-title"> ${data[i].title}</h5>
               <h6 class="card-subtitle mb-2 text-muted">${data[i].title}</h6>
               <p class="card-text">${data[i].discription}</p>
               <a href="#" class="card-link">${data[i].score}</a>
               <a href="#" class="card-link">${data[i].contentType}</a>
           </div>  
       </div>
            `;               // Create element with HTML 
                $(".shows").append(datas);
          }  
     },
     error:function(data){
         
     }
    })


    //from submit
$('.formss').submit(function(e){
    let firstname= $('#firstname').val();
    let id=$('#id').val();
  
    $.ajax({
        url:'http://localhost/STEM%20e-learning/src/assets/php/backend.php',
        type:'post',
        async:true,
        data:{cat:id,firstname:firstname,Aname:'po'},
        success:function(data){
        alert(data);
        },
        error:function(error){
        }
    })


    	e.preventDefault();

  
});

})