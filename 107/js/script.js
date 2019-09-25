$(document).ready(() => {
    let Arr = $("a[data-toggle='collapse']")
    Arr.click(function()  {
 Arr.closest("h2").removeClass("highlight");
          var replaced = $(".haha span").html().replace('-','+');
                $(".haha span").html(replaced);
        setTimeout(() => {
            if($(this).attr("aria-expanded") =="true"){
              
                $(this).closest("h2").addClass("highlight");
                    $(this).children("span").text("-"); 
                                }
        }, 0);
       
    })
})
  