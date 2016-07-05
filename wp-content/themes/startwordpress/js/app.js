jQuery(document).ready(function($) {
 
boxes = $(".same-height");
maxHeight = Math.max.apply(Math, boxes.map(function () {
    return $(this).height()
}).get());
boxes.height(maxHeight);
    
    
});

