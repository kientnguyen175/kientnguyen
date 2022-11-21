<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Without Bootstrap</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
</head>
<body>
    <button id="submit-post">Submit</button>
    <div id="summernote"></div>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script>
        $('#summernote').summernote({
            focus: true,
            codeviewFilter: true,
            codeviewIframeFilter: true,
            height: 300,
            toolbar: [
                ['font', ['bold', 'underline', 'strikethrough', 'clear']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture']],
                ['view', ['fullscreen']]
            ],
            callbacks: {
                onInit: function () {
                    $('#summernote').summernote('code', '');
                },
                onPaste: function (e) {
                    var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');
                    e.preventDefault();
                    document.execCommand('insertText', false, bufferText);
                }
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>

    <script>
        $('#submit-post').click(function () {
            if (confirm('submit post?')) {
                var htmlContent = $('#summernote').summernote('code');
                axios.post('/api/posts', {
                    htmlContent: htmlContent
                }).then(function (response) {
                    console.log(response);
                })
            }
        })
    </script>
</body>
</html>
