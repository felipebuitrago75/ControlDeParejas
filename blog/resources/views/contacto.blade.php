@extends('layouts.principal')

@section('content')

		<div class="contact-content">
			<div class="top-header span_top">
				<div class="logo">
					<a href="index"><img src="images/logo1.png" alt="" /></a>
					<p>Pastoral Familiar</p>
					<p>Unidos por las </p>
					<p>familias</p>
					


				</div>
				
				<div class="clearfix"></div>
			</div>
			<!---contact-->
<div class="main-contact">
		 <h3 class="head">CONTACTENOS</h3>
		 <p>Estamos para ayudarle en lo que necesite</p>
		 <div class="contact-form">
			 <form>
				 <div class="col-md-6 contact-left">
					  <input type="text" placeholder="Nombre" required/>
					  <input type="text" placeholder="Correo electronico" required/>
					  <input type="text" placeholder="Telefono" required/>
				  </div>
				  <div class="col-md-6 contact-right">
					 <textarea placeholder="Escribenos aqui tu mensaje"></textarea>
					 <input type="submit" value="Envianos tu inquietud"/>
				 </div>
				 <div class="clearfix"></div>
			 </form>
	     </div>
		 <div class="contact_info">
			 <h3>Encuentranos cerca a ti</h3>
			 <div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3977.3499365732287!2d-75.67572848581038!3d4.530846144369929!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e38f5b1fbdf8d57%3A0x6731b6fb7d890381!2sDiocesis+de+Armenia+Pastoral+liturgica!5e0!3m2!1ses-419!2sco!4v1462657897742" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
	 </div>
</div>
@stop