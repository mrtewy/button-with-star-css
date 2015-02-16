<link href='http://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>
<style type="text/css">

.content
{
	margin: 100px auto;
	width: 500px;
}

a {
	font-family: 'Quicksand', sans-serif;
	text-decoration: none;
	color: #fff;
	border-radius: 3px;
	font-size: 15px;
	background: #fff;
	display: inline-block;
	border: 1px solid #008F58;
	padding: 2px;
	width: 138px
}

span.button
{
 	background: #008F58;
 	width: 128px;
 	display: inline-block;
 	padding: 8px 0px 8px 10px;
}
span.label
{
	text-shadow: 1px 1px #333;
}

span.star {
  unicode-bidi: bidi-override;
  direction: rtl;
}
span.star {
  display: inline-block;
  position: relative;
  width: 1.1em;
}
span.star:before,
span.star ~ span.star:before {
   content: "\2605";
   position: absolute;
   color: #fff;
}

span.star-blank {
  unicode-bidi: bidi-override;
  direction: rtl;
}
span.star-blank {
  display: inline-block;
  position: relative;
  width: 1.1em;
}

span.star-blank:before,
span.star-blank ~ span.star-blank:before 
{
	content: "\2605";
	position: absolute;
	color:#66B99A;
}

</style>
<div class="content">
<a href="#">
	<span class="button">
		<span class="label">SCORE</span>
		<span class="star">☆</span>
		<span class="star">☆</span>
		<span class="star-blank">☆</span>
	</span>
</a>
<a href="#">
	<span class="button">
		<span class="label">SCORE</span>
		<span class="star-blank">☆</span>
		<span class="star-blank">☆</span>
		<span class="star-blank">☆</span>
	</span>
</a>
<a href="#">
	<span class="button">
		<span class="label">SCORE</span>
		<span class="star">☆</span>
		<span class="star">☆</span>
		<span class="star">☆</span>
	</span>
</a>
<div class="copyright">
	<p>Provided by Tawan Tangkasemvanich</p>
</div>
</div>