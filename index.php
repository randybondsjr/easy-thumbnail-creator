<!doctype html>
<html>
<head>
  <title>ESRI Easy Thumbnail Creator</title>
</head>
<body>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="./css/style.css">
  <!-- js -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
  <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/additional-methods.min.js"></script>
  <script src="./js/main.js"></script>
  
	<div id='wrap'>
		<div class='container central' role='document'>
			<div id='content' class='row'>
		  	<div id='main' class='col-lg-12' role='main'>
		    	<div class='page-header'>
		    		<h1>ESRI Thumbnail Creator</h1>
		      </div>
          <form id="upload" method="POST" action="./result.php"  enctype="multipart/form-data">
            <h5>Choose a background</h5>
            <div class="row form-group">
              <div class="col-sm-4 text-center">
                <label>
                  <img src="./backgrounds/topo.png" class="img-responsive img-radio">
                  <input type="radio" name="background" id="optionsRadios1" value="topo" checked>
                </label>
              </div>
              <div class="col-sm-4 text-center">
                <label>
                  <img src="./backgrounds/mountains.png" class="img-responsive img-radio">
                  <input type="radio" name="background" id="optionsRadios1" value="mountains" >
                </label>
              </div>
              <div class="col-sm-4 text-center">
                <label>
                  <img src="./backgrounds/larson.png" class="img-responsive img-radio">
                  <input type="radio" name="background" id="optionsRadios1" value="larson" >
                </label>
              </div>
            </div>
            <div class="row form-group">
              <div class="col-sm-4 text-center">
                <label>
                  <img src="./backgrounds/church.png" class="img-responsive img-radio">
                  <input type="radio" name="background" id="optionsRadios1" value="church" >
                </label>
              </div>
              <div class="col-sm-4 text-center">
                <label>
                  <img src="./backgrounds/station.png" class="img-responsive img-radio">
                  <input type="radio" name="background" id="optionsRadios1" value="station" >
                </label>
              </div>
              <div class="col-sm-4 text-center">
                <label>
                  <img src="./backgrounds/downtown.png" class="img-responsive img-radio">
                  <input type="radio" name="background" id="optionsRadios1" value="downtown" >
                </label>
              </div>
            </div>
            <div class="form-group">
              <label for="backgroundFile">Or upload your own background</label>
              <input type="file" id="backgroundFile" name="backgroundFile">
              <p class="help-block">File must be png, jpg, or gif. For best results image should be 200px wide by 133px high. <br/><strong>Files are cropped, not scaled</strong></p>
            </div>
            <hr/>
            <h5>Choose a foreground</h5>
            <div class="row form-group">
              <div class="col-sm-4 text-center">
                <label>
                  <img src="./foregrounds/thumbnail-template-app.png" class="img-responsive img-radio">
                  <input type="radio" name="foreground" id="optionsRadios1" value="thumbnail-template-app" checked>
                </label>
              </div>
              <div class="col-sm-4 text-center">
                <label>
                  <img src="./foregrounds/thumbnail-template-layer.png" class="img-responsive img-radio">
                  <input type="radio" name="foreground" id="optionsRadios1" value="thumbnail-template-layer" >
                </label>
              </div>
              <div class="col-sm-4 text-center">
                <label>
                  <img src="./foregrounds/thumbnail-template-map.png" class="img-responsive img-radio">
                  <input type="radio" name="foreground" id="optionsRadios1" value="thumbnail-template-map" >
                </label>
              </div>
            </div>
            <div class="row form-group">
              <div class="col-sm-4 text-center">
                <label>
                  <img src="./foregrounds/thumbnail-template-pdf.png" class="img-responsive img-radio">
                  <input type="radio" name="foreground" id="optionsRadios1" value="thumbnail-template-pdf" >
                </label>
              </div>
              <div class="col-sm-4 text-center">
                <label>
                  <img src="./foregrounds/thumbnail-template-widget.png" class="img-responsive img-radio">
                  <input type="radio" name="foreground" id="optionsRadios1" value="thumbnail-template-widget" >
                </label>
              </div>
            </div>
            
            <div class="form-group">
              <label for="text">Title on Thumbnail</label>
              <input type="text" class="form-control" id="text" name="text" placeholder="Enter text">
            </div>
            
            <div class="form-group">
              <label for="fontsize">Font Size</label>
              <select class="form-control" id="fontsize" name="fontsize">
                <option>10</option>
                <option>11</option>
                <option>12</option>
                <option>13</option>
                <option>14</option>
                <option selected>15</option>
                <option>16</option>
                <option>17</option>
                <option>18</option>
                <option>19</option>
                <option>19</option>
              </select>
            </div>

            <h5>Preview <small><em>*uploaded files not previewed*</em></small></h5>
            <div class="form-group">
              <div id="preview">
                <div id="background">
                  <div id="foreground">
                    <div id="title"><span></span></div>
                  </div>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Download Image</button>
          </form>
          <hr/>
				</div><!-- main -->
			</div><!-- #content -->
		</div>
  </div>
</body>
</html>