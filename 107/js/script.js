$(document).ready(() => {
    let Arr = $("a[data-toggle='collapse']")
    Arr.click(function()  {
        Arr.closest("h2").removeClass("highlight");
        setTimeout(() => {
            if($(this).attr("aria-expanded") =="true"){
               
                $(this).closest("h2").addClass("highlight");
            }
        }, 0);
       
    })
})
  