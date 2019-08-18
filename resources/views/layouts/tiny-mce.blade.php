@push('js-top')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/w8nvu923ubw8jel9sjjlpzm4bc71usdywb7jqaqks0o1to3i/tinymce/5/tinymce.min.js"></script>
    
    <script>
		tinymce.init({
	    	menubar: false,
		    selector:'textarea.richTextBox',
		    min_height: 400,
		    resize: 'vertical',
		    plugins: 'link, image, code, table, textcolor, lists',
		    extended_valid_elements : 'input[id|name|value|type|class|style|required|placeholder|autocomplete|onclick]',
		    toolbar: 'styleselect bold italic underline | forecolor backcolor | alignleft aligncenter alignright | bullist numlist outdent indent | link image table | code',
		    convert_urls: false,
		    image_caption: true,
		    image_title: true
	    });
	</script>
@endpush
