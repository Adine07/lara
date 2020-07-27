$(function () {
    $("#datableArticle").DataTable({
        "responsive": true,
        "autoWidth": false,
    });
    $('.textarea').summernote({
        placeholder: 'Write your article here',
        height: 500
    });
});
