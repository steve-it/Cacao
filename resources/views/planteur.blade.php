{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('Nom_Prenom', 'Nom_Prenom:') !!}
			{!! Form::text('Nom_Prenom') !!}
		</li>
		<li>
			{!! Form::label('Contact_Communaute', 'Contact_Communaute:') !!}
			{!! Form::text('Contact_Communaute') !!}
		</li>
		<li>
			{!! Form::label('Age', 'Age:') !!}
			{!! Form::text('Age') !!}
		</li>
		<li>
			{!! Form::label('sexe', 'Sexe:') !!}
			{!! Form::text('sexe') !!}
		</li>
		<li>
			{!! Form::label('Nombre_conjoints', 'Nombre_conjoints:') !!}
			{!! Form::text('Nombre_conjoints') !!}
		</li>
		<li>
			{!! Form::label('Nombre_enfants_filles', 'Nombre_enfants_filles:') !!}
			{!! Form::text('Nombre_enfants_filles') !!}
		</li>
		<li>
			{!! Form::label('Nombre_enfants_garcons', 'Nombre_enfants_garcons:') !!}
			{!! Form::text('Nombre_enfants_garcons') !!}
		</li>
		<li>
			{!! Form::label('Taille_menage', 'Taille_menage:') !!}
			{!! Form::text('Taille_menage') !!}
		</li>
		<li>
			{!! Form::label('NumAutorisationExploitation', 'NumAutorisationExploitation:') !!}
			{!! Form::text('NumAutorisationExploitation') !!}
		</li>
		<li>
			{!! Form::label('type_contrat', 'Type_contrat:') !!}
			{!! Form::text('type_contrat') !!}
		</li>
		<li>
			{!! Form::label('status', 'Status:') !!}
			{!! Form::text('status') !!}
		</li>
		<li>
			{!! Form::label('fonction', 'Fonction:') !!}
			{!! Form::text('fonction') !!}
		</li>
		<li>
			{!! Form::label('Nationalite', 'Nationalite:') !!}
			{!! Form::text('Nationalite') !!}
		</li>
		<li>
			{!! Form::label('Situation_Matrimoniale', 'Situation_Matrimoniale:') !!}
			{!! Form::text('Situation_Matrimoniale') !!}
		</li>
		<li>
			{!! Form::label('Nombre_Plantations', 'Nombre_Plantations:') !!}
			{!! Form::text('Nombre_Plantations') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}