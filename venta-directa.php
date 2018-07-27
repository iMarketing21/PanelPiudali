<!doctype html>
<html lang="en">
  <?php include 'head.php'; ?>
  <body>

<?php include 'header.php'; ?>
	
 <div class="container-fluid">
 	<div class="row">
 		<div class="col-sm-5 col-md-3">
		 	<?php include 'menu.php'; ?>
		</div>
		<div class="col-md-9">
			<div class="informacion">
				<h2>Comercialización</h2>
				<div class="row">
					<div class="row align-items-center">
						<div class="col-md-6">
			            	<center>
								<h3>VENDE DIRECTAMENTE</h3>
								<h5>Manejas inventario y logística!</h5>
								<a class="btn-verde" href="Productos" role="button" style="background-color: #5C1840;border: #5C1840;">PRODUCTOS DISPONIBLES</a>
							</center>
						</div>
						<div class="col-md-6">
							<img src="img/comercializacion-venta-directa.png" class="img-fluid">
						</div>
					</div>

					
					<div class="col-md-12">
						<hr/>
						<h3>Venta Directa</h3>
						<form>
							<div class="row">
							<div class="col-sm-6 col-md-2">
							  <div class="form-group">
							    <label for="exampleInputEmail1">Campaña</label>
							    <select class="form-control" id="exampleFormControlSelect1">
							      <option>1</option>
							      <option>2</option>
							      <option>3</option>
							      <option>4</option>
							      <option>5</option>
							    </select>
							  </div>
							</div>
							<div class="col-sm-6 col-md-2">
						  <div class="form-group">
						    <label for="exampleInputEmail1">Estado</label>
						    <select class="form-control" id="exampleFormControlSelect1">
						      <option>1</option>
						      <option>2</option>
						      <option>3</option>
						      <option>4</option>
						      <option>5</option>
						    </select>
						  </div>
						  </div>
						  </div>
						</form>
						<div class="table-responsive">
							<table class="table table-striped">
								<thead>
									<tr class="tablaTitulo">
										<th class="text-center">FECHA</th>
										<th class="text-center">ESTADO</th>
										<th class="text-center">ORDEN DE PEDIDO</th>					
										<!--<th class="text-center">SUBTOTAL ANTES DE IVA</th>
										<th class="text-center">DESCUENTOS CUPÓN</th>
										<th class="text-center">DESCUENTOS ESCALA %</th>
										<th class="text-center">DESCUENTOS ESCALA $</th>
										<th class="text-center">TOTAL NETO ANTES DE IVA</th>
										<th class="text-center">IVA</th>
										<th class="text-center">FLETE</th>-->
										<th class="text-center">TOTAL PAGADO</th>
										<th class="text-center">BASE RENTABILIDAD</th>
										<th class="text-center">RENTABILIDAD $</th>
										<th class="text-center">RENTABILIDAD %</th>
									</tr>
								</thead>
								<tbody>
													<tr>
										<td colspan="11" class="text-center">Aún no se registran movimientos.</td>
									</tr>
													
								</tbody>
							</table>
						</div>
		            </div>
		            
	        	</div>
			</div>
		</div>
	</div>
 </div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificar Nombre</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Guardar</button>
        <a href="#">Cancelar</a>
      </div>
    </div>
  </div>
</div>



<footer id="colophon" class="site-footer">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-2">
					<center>
						<img src="img/link-grupo-marketing.png" class="img-fluid" alt="Link Grupo Marketing"/>
						<br/>
						<img src="img/piudali-footer.png" class="img-fluid" alt="Piudali - Waliwa"/>
					</center>
				</div>
				<div class="col-md-10">
					<div class="row">
						<div class="offset-md-1 col-md-3">
							<h5>Consumidores</h5>
							<ul id="footer-menu" class="menu"><li id="menu-item-1023" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1023"><a href="https://piudali.com.co/donde-comprar/">Dónde Comprar</a></li>
<li id="menu-item-171" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-171"><a href="https://piudali.com.co/contactenos/">Atención a Clientes</a></li>
<li id="menu-item-648" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-648"><a href="https://piudali.com.co/servicio-al-cliente/">Política de Servicio</a></li>
<li id="menu-item-653" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-653"><a href="https://piudali.com.co/politica-de-promociones/">Política de Promociones</a></li>
<li id="menu-item-647" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-647"><a href="https://piudali.com.co/politica-privacidad/">Política de Datos</a></li>
</ul>
						</div>
						<div class="col-md-4">
							<h5>Distribuidores</h5>
							<ul id="Footer Lineas" class="menu"><li id="menu-item-897" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-897"><a href="https://piudali.com.co/terminos-y-condiciones/">Registro y Activación</a></li>
<li id="menu-item-898" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-898"><a href="https://piudali.com.co/comercializacion/">Comercialización</a></li>
<li id="menu-item-899" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-899"><a href="https://piudali.com.co/plan-de-beneficios/">Plan de Beneficios</a></li>
<li id="menu-item-1022" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1022"><a href="https://piudali.com.co/mis-pedidos/">Mis pedidos</a></li>
<li id="menu-item-913" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-913"><a href="https://piudali.com.co/logistica-y-servicio/">Logística y Servicio</a></li>
</ul>

							<a href="https://www.facebook.com/PiudaliColombia/" class="socialmedia" target="_blank"><i class="fab fa-facebook-f"></i></a>
							<a href="https://www.instagram.com/piudalicolombia/" class="socialmedia" target="_blank"><i class="fab fa-instagram"></i></a>
							<a href="https://www.youtube.com/channel/UCUu4Moh5uFyEyt1Dx0qxuMg" class="socialmedia" target="_blank"><i class="fab fa-youtube"></i></a>
						</div>
						<div class="col-md-4">
							<h5>Contacto</h5>
							Distribuidor Exclusivo para Colombia<br/><a href="https://piudali.com.co/distribuidor-autorizado/">Link Grupo Marketing SAS</a><br/>
							Teléfonos:<br/> 
							(+57)(2) 524 1887<br/>
							(+57) 311 627 9068<br/>
							Email: contacto[@]piudali.com.co
						</div>
						</div>
						<div class="col-xs-12">
							<div class="alinear-texto" style="opacity: 0.5; margin-top: 0.5rem">
								Todos los derechos reservados <a href="https://piudali.com.co/distribuidor-autorizado/">Link Grupo Marketing SAS</a> © 2018
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
	<div class="franja"></div>
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  </body>
</html>