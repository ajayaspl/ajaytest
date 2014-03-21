<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<div class="fb-like" data-href="https://www.facebook.com/carspsn" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>



foreach ($results as $datas => $data)
		{
			$srcFolder[$data->id] = array('image'=>JFolder::files($sitePath.$srcimgfolder , $data->image), 'name'=>$data->name);
		}
		// Proceed if the folder is OK or fail silently
		if (!$srcFolder)
			return;

		echo '<pre>';print_r($srcFolder);
