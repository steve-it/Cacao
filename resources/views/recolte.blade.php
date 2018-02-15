{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('id_plantation', 'Id_plantation:') !!}
			{!! Form::text('id_plantation') !!}
		</li>
		<li>
			{!! Form::label('daterecolte', 'Daterecolte:') !!}
			{!! Form::text('daterecolte') !!}
		</li>
		<li>
			{!! Form::label('Dateecabossage', 'Dateecabossage:') !!}
			{!! Form::text('Dateecabossage') !!}
		</li>
		<li>
			{!! Form::label('Dispositiffermentation', 'Dispositiffermentation:') !!}
			{!! Form::text('Dispositiffermentation') !!}
		</li>
		<li>
			{!! Form::label('Nombrejoursfermentation', 'Nombrejoursfermentation:') !!}
			{!! Form::text('Nombrejoursfermentation') !!}
		</li>
		<li>
			{!! Form::label('Nombrebrassages', 'Nombrebrassages:') !!}
			{!! Form::text('Nombrebrassages') !!}
		</li>
		<li>
			{!! Form::label('Dispositifsechage', 'Dispositifsechage:') !!}
			{!! Form::text('Dispositifsechage') !!}
		</li>
		<li>
			{!! Form::label('Nombrejourssechage', 'Nombrejourssechage:') !!}
			{!! Form::text('Nombrejourssechage') !!}
		</li>
		<li>
			{!! Form::label('Typeembalage', 'Typeembalage:') !!}
			{!! Form::text('Typeembalage') !!}
		</li>
		<li>
			{!! Form::label('Dureestockage', 'Dureestockage:') !!}
			{!! Form::text('Dureestockage') !!}
		</li>
		<li>
			{!! Form::label('Nombresacsproduits', 'Nombresacsproduits:') !!}
			{!! Form::text('Nombresacsproduits') !!}
		</li>
		<li>
			{!! Form::label('Poidsphysiqueproduit', 'Poidsphysiqueproduit:') !!}
			{!! Form::text('Poidsphysiqueproduit') !!}
		</li>
		<li>
			{!! Form::label('Lieustockage', 'Lieustockage:') !!}
			{!! Form::text('Lieustockage') !!}
		</li>
		<li>
			{!! Form::label('Dateachat', 'Dateachat:') !!}
			{!! Form::text('Dateachat') !!}
		</li>
		<li>
			{!! Form::label('Poidsachete', 'Poidsachete:') !!}
			{!! Form::text('Poidsachete') !!}
		</li>
		<li>
			{!! Form::label('Qualiteproduit', 'Qualiteproduit:') !!}
			{!! Form::text('Qualiteproduit') !!}
		</li>
		<li>
			{!! Form::label('Observations', 'Observations:') !!}
			{!! Form::textarea('Observations') !!}
		</li>
		<li>
			{!! Form::label('Recommandations', 'Recommandations:') !!}
			{!! Form::textarea('Recommandations') !!}
		</li>
		<li>
			{!! Form::label('Numfiche', 'Numfiche:') !!}
			{!! Form::text('Numfiche') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}