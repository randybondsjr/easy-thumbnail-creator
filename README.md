# Easy Thumbnail Creator
PHP Web application for generating thumbnail images for ArcGIS Online, based loosely off of <https://github.com/sirws/ThumbnailBuilderUI> (but really could be used for any thumbnail creation). This application uses PHP to create an image on the fly for ESRI Online thumbnails. By default, the foreground and background pre-packaged files are found in directories of the same name. To use your own images, replace the files in those folders and edit the HTML accordingly to point to them in the form (index.php).

Users can also upload background images. I did not allow for upload of foreground images to control general branding. 

The CDN libraries were used for js and css to lighten the size of the repository.

## Requirements
1. PHP
2. [PHP GD Library](https://github.com/sirws/ThumbnailBuilderUI)
3. [jQuery](http://jquery.com/)
4. [jQuery Validate] (http://jqueryvalidation.org/)
5. [jQuery Validate Additonal Methods](http://jqueryvalidation.org/)

## Recommended (not required)
1. [Bootstrap](http://getbootstrap.com) -- not required, but html built with it in mind

## Future
1. **Resize and Crop User Uploaded Images** - Currently the user uploaded images are simply cropped, not resized and then cropped. Eventually, this should be added.

## Resources
1. A Photoshop file is included in the repository for easy thumbnail foreground creation (thumbnail-template.psd). 


Pull Requests Welcome!



 



