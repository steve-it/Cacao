{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('Matricule', 'Matricule:') !!}
			{!! Form::text('Matricule') !!}
		</li>
		<li>
			{!! Form::label('Nom_prenom', 'Nom_prenom:') !!}
			{!! Form::text('Nom_prenom') !!}
		</li>
		<li>
			{!! Form::label('fonction', 'Fonction:') !!}
			{!! Form::text('fonction') !!}
		</li>
		<li>
			{!! Form::label('sexe', 'Sexe:') !!}
			{!! Form::text('sexe') !!}
		</li>
		<li>
			{!! Form::label('telephone1', 'Telephone1:') !!}
			{!! Form::text('telephone1') !!}
		</li>
		<li>
			{!! Form::label('telephone2', 'Telephone2:') !!}
			{!! Form::text('telephone2') !!}
		</li>
		<li>
			{!! Form::label('email', 'Email:') !!}
			{!! Form::text('email') !!}
		</li>
		<li>
			{!! Form::label('numerocase', 'Numerocase:') !!}
			{!! Form::text('numerocase') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}