
$( () => {

  
    $('.list-group.checked-list-box .list-group-item').each(function () {
        
        // Settings
        var $widget = $(this),
            $checkbox = $('<input type="checkbox" class="hidden" />'),
            
            $all = $('li:first-child span');
          
          
            $widget2 = $('.list-group-item'),
            $spanAll = $('.list-group-item input'),
            color = ($widget.data('color') ? $widget.data('color') : "primary"),
            style = ($widget.data('style') == "button" ? "btn-" : "list-group-item-"),
            settings = {    
                on: {
                    icon: 'glyphicon glyphicon-check'
                },
                off: {
                    icon: 'glyphicon glyphicon-unchecked'
                }
            };
            $all.attr("id", "all");
        $widget.css('cursor', 'pointer')
        $widget.append($checkbox);
       
      
        $($widget).on('click', function (event) {
            var target = $ (event.target);
            if(target.is("#all")){
                
                
            $spanAll.prop('checked', !$checkbox.is(':checked'));
           
               updateDisplay2();
                
            }
          
            else{
              
            $checkbox.prop('checked', !$checkbox.is(':checked'));
            $checkbox.triggerHandler('change');
            updateDisplay();}
        });
        
        // Actions
        function updateDisplay() {
            var isChecked = $checkbox.is(':checked');

            // Set the button's state
            $widget.data('state',  (isChecked) ? "on" : "off" );

            // Set the button's icon
            $widget.find('.state-icon')
                .removeClass()
                .addClass('state-icon ' + settings[$widget.data('state')].icon);
             
            // Update the button's color
            if (isChecked) {
                $widget.addClass(style + color + ' active');
            } else {
                $widget.removeClass(style + color + ' active');
            }
        }
        function updateDisplay2() {
            var isChecked = $checkbox.is(':checked');

            // Set the button's state
            $widget2.data('state', (isChecked) ? "on" : "off");

            // Set the button's icon
            $widget2.find('.state-icon')
                .removeClass()
                .addClass('state-icon ' + settings[$widget.data('state')].icon);
               
            // Update the button's color
            if (isChecked) {
                $widget2.addClass(style + color + ' active');
                $('#all').attr("style", "background-color: #286090; color: #fff;")
            } else {
                $widget2.removeClass(style + color + ' active');
                $('#all').removeAttr("style", "background-color: #286090; color: #fff;")
            }
        }

        // Initialization
        function init() {
            
            if ($widget.data('checked') == true) {
                $checkbox.prop('checked', !$checkbox.is(':checked'));
            }
            
            updateDisplay();

            // Inject the icon if applicable
            if ($widget.find('.state-icon').length == 0) {
                $widget.prepend('<span class="state-icon ' + settings[$widget.data('state')].icon + '"></span>');
            }
        }
        init();
    });
   

    $('#get-checked-data').on('click', function(event) {
        event.preventDefault(); 
        var checkedItems = {}, counter = 0;
        $("#check-list li.active").each(function(idx, li) {
            checkedItems[counter] = $(li).text();
            counter++;
        });
        $('#display-json').html(JSON.stringify(checkedItems, null, '\t'));
       
    });
});