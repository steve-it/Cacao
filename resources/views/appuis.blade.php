{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('id_planteur', 'Id_planteur:') !!}
			{!! Form::text('id_planteur') !!}
		</li>
		<li>
			{!! Form::label('Annee_Financement', 'Annee_Financement:') !!}
			{!! Form::text('Annee_Financement') !!}
		</li>
		<li>
			{!! Form::label('Source_Financement1', 'Source_Financement1:') !!}
			{!! Form::text('Source_Financement1') !!}
		</li>
		<li>
			{!! Form::label('Source_Financement2', 'Source_Financement2:') !!}
			{!! Form::text('Source_Financement2') !!}
		</li>
		<li>
			{!! Form::label('MontantFinancement', 'MontantFinancement:') !!}
			{!! Form::text('MontantFinancement') !!}
		</li>
		<li>
			{!! Form::label('TypeFinancement', 'TypeFinancement:') !!}
			{!! Form::text('TypeFinancement') !!}
		</li>
		<li>
			{!! Form::label('EtatRemboursementCredit', 'EtatRemboursementCredit:') !!}
			{!! Form::text('EtatRemboursementCredit') !!}
		</li>
		<li>
			{!! Form::label('AnneeReceptionMateriel', 'AnneeReceptionMateriel:') !!}
			{!! Form::text('AnneeReceptionMateriel') !!}
		</li>
		<li>
			{!! Form::label('AnneeFormation', 'AnneeFormation:') !!}
			{!! Form::text('AnneeFormation') !!}
		</li>
		<li>
			{!! Form::label('SourceFinancement3', 'SourceFinancement3:') !!}
			{!! Form::text('SourceFinancement3') !!}
		</li>
		<li>
			{!! Form::label('Modules', 'Modules:') !!}
			{!! Form::text('Modules') !!}
		</li>
		<li>
			{!! Form::label('lieu', 'Lieu:') !!}
			{!! Form::text('lieu') !!}
		</li>
		<li>
			{!! Form::label('Machettes', 'Machettes:') !!}
			{!! Form::text('Machettes') !!}
		</li>
		<li>
			{!! Form::label('Limes', 'Limes:') !!}
			{!! Form::text('Limes') !!}
		</li>
		<li>
			{!! Form::label('Secateurs', 'Secateurs:') !!}
			{!! Form::text('Secateurs') !!}
		</li>
		<li>
			{!! Form::label('Pulverisateurs', 'Pulverisateurs:') !!}
			{!! Form::text('Pulverisateurs') !!}
		</li>
		<li>
			{!! Form::label('Scies', 'Scies:') !!}
			{!! Form::text('Scies') !!}
		</li>
		<li>
			{!! Form::label('Insecticides', 'Insecticides:') !!}
			{!! Form::text('Insecticides') !!}
		</li>
		<li>
			{!! Form::label('Fongicide', 'Fongicide:') !!}
			{!! Form::text('Fongicide') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}