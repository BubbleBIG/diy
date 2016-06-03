$(function(){
    $('#Contents').click(function() {
    $('#cont').load('./php/contents.php');
});
    $('#View').click(function() {
        $('#cont').load('./php/view.php');
    });
    $('#Other').click(function() {
        $('#cont').load('./php/other.php');
    })
});