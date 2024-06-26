<!DOCTYPE html> 
<meta charset="utf-8"> 
<html>
	<header>
		
		<h1 id="title">inscription</h1>
	</header>
    <style>
         @import url(https://fonts.googleapis.com/css?family=Raleway:400,500);
	html,body
	{
		background-color: #e1d5d3;
		text-align: center;
		font-family: Raleway ,Helvetica , sans-serif;
		min-width: 330px;
	}
	header
	{
		font-size: 2em;
		font-weight: bold;
		margin: 20px;
	}
	#form-outer
	{
		background-color: rgb(250, 250, 250);
		margin:0 auto;
		border-radius: 6px;
		width: 75%;
		max-width: 900px;
		padding: 10px;
		padding-top: 30px;
	}
	.labels
	{
		display: inline-block;
		text-align: right;
		width: 40%;
		padding: 5px;
		vertical-align: top;
		margin-top: 10px;
	}
	.rightTab
	{
		display: inline-block;
		text-align: left;
		width: 48%;
		vertical-align: middle;
	}
	.input-field
	{
		height: 20px;
		width: 280px;
		padding: 5px;
		margin:10px;
		border: 1px solid #c0c0c0;
		border-radius: 2px;
	}
	#userAge
	{
		width: 40px;
	}
	.userRatings, input[type="checkbox"] 
	{
		float: left;
		margin-right: 5px;
	}	
	#submit 
	{
		background-color: #59ace0;
		border-radius: 4px;
		color: white;
		font-size: 1em;
		height: 40px;
		width: 96px;
		margin: 10px;
		border: 0px solid;
	}
	.dropdown 
	{
		height: 35px;
		width: 140px;
		padding: 5px;
		margin: 10px;  
		margin-top: 15px;
		border: 1px solid #c0c0c0;
		border-radius: 2px;
	}
	.radio, .checkbox
	{
		position: relative;
		left: -43px;
		margin-left: 10px;
		display: block;
		padding-bottom: 10px;
	}
	@media screen and (max-width: 833px) 
	{
		.input-field 
		{
			width: 80%;
		}
		select 
		{
			width: 90%;
		}
	}

	@media screen and (max-width: 520px) 
	{
		.labels 
		{
			width: 100%;
			text-align: left;
		}
		.rightTab 
		{
			width: 80%;
			float: left;
		}
		.input-field 
		{
			width: 100%;
		}
		select 
		{
			width: 100%;
		}
	}
        </style>
	<body>
	<div id="form-outer">
		<p id="description">Dis moi comment je peux m'améliorer.</p>
		<form id="survey-form" action="">
			<div class="rowTab"> 
				<div class="labels"><!-- demande de nom -->
					<label id="name-label" for="name">* Ton nom :</label>
				</div>
				<div class="rightTab">
					<input autofocus type="text" name="name" id="name" class="input-field" placeholder="Nom et prénom" required>
				</div>
			</div>
			<div class="rowTab">
				<div class="labels"><!-- demande de Mail-->
					<label id="email-label" for="email">* Ton Email :</label>
				</div>
				<div class="rightTab">
					<input type="email" name="email" id="email" class="input-field" required placeholder="Ton Email">
				</div>
			</div>
			<div class="rowTab">
				<div class="labels"><!--demande d'age ma gueule-->
					<label id="number-label" for="age">* Ton âge :</label>
				</div>
				<div class="rightTab">
					<input type="date" name="age" id="number" min="7" max="77" class="input-field" required placeholder="Ton âge">
				</div>
			</div>
			<div class="rowTab">
				<div class="labels"><!--demande d'age ma gueule-->
					<label id="number-label" for="categorie">* Categorie :</label>
				</div>
				<div class="rightTab">
					<input type="categorie" name="categorie" id="number" min="7" max="77" class="input-field" required placeholder="categorie">
				</div>
			</div>
			{{-- <div class="rowTab">
				<div class="labels"><!-- choix multiple sur le job-->
					<label for="currentPos">Qu'est-ce qui te correspond le mieux à l'instant présent :</label>
				</div> --}}
				{{-- <div class="rightTab">
					<select id="dropdown" name="currentPos" class="dropdown">
						<option disabled selected value>Dis moi en plus sur toi</option>
						<option value="student">Etudiant</option>
						<option value="job">Employé</option>
						<option value="liberalJob">Profession libérale</option>
						<option value="prefereNo">Je ne préfère rien dire</option>
						<option value="other">Autre</option>
					</select>
				</div> --}}
			</div>
			{{-- <div class="rowTab">
				<div class="labels"><!--choix multiple sur la recommendation-->
					<label for="userRating">Est-ce que tu me recommandes?</label>
				</div> --}}
				{{-- <div class="rightTab">
					<ul style="list-style: none;">
						<li class="radio">
							<label>Oui<input name="radio-buttons" value="1" type="radio" class="userRatings"></label>
						</li>
						<li class="radio">
							<label>Peut-être <input name="radio-buttons" value="2" type="radio" class="userRatings"></label>
						</li>
						<li class="radio">
							<label>Non<input name="radio-buttons" value="3" type="radio" class="userRatings"></label>
						</li>
					</ul>
				</div>
			</div>
		    <div class="rowTab"> --}}
		      	{{-- <div class="labels"><!--choix morale-->
		        	<label for="most-like">pourquoi as tu choisis mes services ? </label>
		      	</div> --}}
		      	{{-- <div class="rightTab">
		        	<select id="most-like" name="mostLike" class="dropdown">
		      			<option disabled selected value>Choisis une réponse</option>
		      			<option value="challenges">Pour ce que je propose</option>
		      			<option value="projects">Pour les differents projets realisés</option>
		      			<option value="community">Par recommendation</option>
		      			<option value="openSource">Le fait d'être transparent avec ma communauté</option>
		    		</select>
		      	</div> --}}
		    </div>
		    {{-- <div class="rowTab">
		    	<div class="labels">
		    		<label for="preferences">Qu'est-ce que je dois ameliorer :<br>(choix illimité): </label>
		    	</div>
		    	<div class="rightTab">
		    		<ul id="preferences" style="list-style: none;">
		    			<li class="checkbox"><label><input name="prefer" value="1" type="checkbox" class="userRatings">Le Portfolio</label>
		    			</li>
		    			<li class="checkbox"><label><input name="prefer" value="2" type="checkbox" class="userRatings">La page de vente</label>
		    			</li>		    			
		    			<li class="checkbox"><label><input name="prefer" value="3" type="checkbox" class="userRatings">Présence sur les réseaux sociaux</label>
		    			</li>		    			
		    			<li class="checkbox"><label><input name="prefer" value="4" type="checkbox" class="userRatings">Le formulaire de contact</label>
		    			</li>		    			
		    			<li class="checkbox"><label><input name="prefer" value="5" type="checkbox" class="userRatings">Le design du portfolio</label>
		    			</li>
		    		</ul>
		    	</div> --}}
		    </div>
			<div class="rowTab">
				<div class="labels">
					<label for="comments">Un commentaire à ajouter?</label>
				</div>
				<div class="rigtTab">
					<textarea id="comments" class="input-field" style="height:50px; resize:vertical;" placeholder="Chaque commentaire nous fait avancer, alors n'hésites pas..."></textarea>
				</div>
			</div>
			<button id="submit" type="submit">Envoi !</button>
		</form>
	</div>

	</body>
</html>