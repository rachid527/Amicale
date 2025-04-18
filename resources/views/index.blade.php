{{-- Message flash après suppression --}}
@if(session('info'))
    <div class="notification is-success">
        {{ session('info') }}
    </div>
@endif

<table class="table is-hoverable is-fullwidth">
    <thead>
        <tr>
            <th>Image</th>
            <th>Titre</th>
            <th>Date</th>
            <th>Prix</th>
            <th>Statut</th>
            <th>Voir</th>
        </tr>
    </thead>
    <tbody>
        @foreach($Activities as $Activity)
            <tr>
                <td>
                    <img src="{{ asset($Activity->image_path) }}" alt="Image activité" width="100">
                </td>
                <td>{{ $Activity->titre }}</td>
                <td>{{ $Activity->date }}</td>
                <td>{{ $Activity->prix }} FCFA</td>

                {{-- Déterminer le statut de l’activité --}}
                <td>
                    @php
                        $now = now();
                        $date = \Carbon\Carbon::parse($Activity->date);
                    @endphp
                    @if ($date->isPast())
                        <span class="tag is-danger">Passée</span>
                    @elseif ($date->isToday())
                        <span class="tag is-warning">En cours</span>
                    @else
                        <span class="tag is-success">À venir</span>
                    @endif
                </td>

                <td>
                    <a class="button is-primary" href="{{ route('activities.show', $Activity->id) }}">
                        Voir
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
