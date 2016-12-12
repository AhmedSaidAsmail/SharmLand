$(document).ready(function() {
    $('#addNew').click(function() {
        var autoDiv = $("#basicToggle");
        if (autoDiv.is(":visible")) {
            autoDiv.height(200).animate({
                height: 0
            }, 1000);
            setTimeout(function() {
                autoDiv.hide();
            }, 1000);
        } else {
            autoDiv.css('height', 'auto');
            var AutoHeight = autoDiv.height();
            autoDiv.height(0).animate({
                height: AutoHeight
            }, 1000);
            autoDiv.show();
        }
    });
});