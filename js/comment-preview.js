// @reference
// http://www.ivanthevariable.com/wordpress-comment-live-preview
$('p[class*="comment-form"] > input').each(function() {
    $(this).val('');
});


$('p[class*="comment-form"] > input').change(function() {
    var author = $('#author').val(),
        email = CryptoJS.MD5( $('#email').val().toLowerCase().trim() ),
        url = $('#url').val();

    $('.preview-url').text(author);
    $('.commentPreview .avatar').attr('src','http://gravatar.com/avatar/' + email);
    $('.preview-url').attr('href',url);
});


$('textarea#comment').keyup(function() {
    var comment = $(this).val();
    $('.preview-text').html(comment);
    Prism.highlightAll(true);
});