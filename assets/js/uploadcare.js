// Getting an instance of the widget.
			const widget = uploadcare.Widget('[role=uploadcare-uploader]');
			// Selecting an image to be replaced with the uploaded one.
			const preview = document.getElementById('preview');
			// "onUploadComplete" lets you get file info once it has been uploaded.
			// "cdnUrl" holds a URL of the uploaded file: to replace a preview with.
			widget.onUploadComplete(fileInfo => {
			  preview.src = fileInfo.cdnUrl;
			})