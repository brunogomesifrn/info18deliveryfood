
@extends ('layout.base')
@section('conteudo')
			
				
	<div class="container" id="container">
	
	<div class="row p1">
	<div class="col-md-12">
	
		<h2 style="text-align: center; font-family: Arial; color: #1C1C1C" class="p3">Quem somos!</h2>
	
	</div>
	</div>
	
	
	<div class="row">
	<div class="col-md-3">
	<img src="images/header.jpg" class="img-circle img-responsive" alt="log do site" width="" height="">

	
	
	</div>
	
	
	<div class="col-md-9">
	 <p class="p4 paragrafos" align="justify">  
		Os autores deste site de vendas de produtos alimentícios caseiros são alunos concluintes do Curso Técnico Integrado em Informática - modalidade presencial - no Instituto Federal de Educação, Ciência e Tencologia do Rio Grande do Norte - Campus Canguaretama.
<br/> 
<br/> 
		<h4> Estes são os desenvolvedores desta página web </h4>

		<h4> <a href="http://lattes.cnpq.br/5088579448491365" target="_blank"> Aline Bispo da Silva </a> </h4>

		<h4> <a href="http://lattes.cnpq.br/3148836060953778" target="_blank"> Ana Karolina dos Santos Silva </a> </h4>
 
		<h4> <a href="http://lattes.cnpq.br/816843605748495" target="_blank"> Simeone Gregorio dos Santos </a> </h4>
		

	 </p>

		</div>
	</div>
	</div>
	
	
		<div class="container" style="padding-bottom: 30px; margin-top: 30px;">
				<div class="row">
				
				<div class="col-md-12">
				
				<h2 style="text-align: center; font-family: Arial; color: #1C1C1C" class="p3">Mande-nos uma mensagem</h2>	
				 <p class="p4 paragrafos" style="text-align: center;">Qualquer dúvida, sugestão ou problema com relção ao site, mande-nos uma mensagem.</p>
				
				</div>
				</div>
				</div>
			
			
			<div class="container">
			<div class="container" style="margin-left: 40px;">
			<div class="row">
				<section id="pageid">
<div class="container content-section">
	<div class="row justify-content-center">
		<div class="col-md-8">
            <div id="contactform">
                <!-- Replace the e-mail address -->
                <form action="https://formspree.io/wowthemesnet@gmail.com"
                      method="POST">
                    <input type="text" name="name" placeholder="Nome" required>
                    <input type="email" name="_replyto" placeholder="Seu endereço de email" required>
                    <textarea name="message" rows="7" placeholder="Digite sua mensagem" required></textarea>
                    <!-- Replace Aries with the name of your website -->
                    <input type="hidden" name="_subject" value="New message via Aries!" />
                    <input type="text" name="_gotcha" style="display:none" />
                    <!-- Replace http://www.themepush.com/freethemes/aries/ with your website url -->
                    <input type="hidden" name="_next" value="https://wowthemesnet.github.io/template-aries-bootstrap-html/thankyou.html" />
                    <input class="btn" type="submit" value="Send">
                </form>
            </div>
		</div>
	</div>
</div>
</section>
						
					
				</div>
				</div>
			</div>
						
		
	

</div>


@endsection