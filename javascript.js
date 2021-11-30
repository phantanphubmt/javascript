function showP () {
  $("p").show();
}

$(document).ready(function(){
  // console.log('done')
  $(".button").click(function() {
    var element = this;
    var $selector = $(this);
    // console.log(element, $selector);
    var id = $selector.attr('id');
    var $listItem = $('.list-item');
    
    
  });
});
$(document).ready(function(){
    var button = $('#button1');
    button.click(function(){
        button.css('background-color', 'yellow');
    })
})




// element la DOM HTML
// selector là jquery function select tới 1 element



