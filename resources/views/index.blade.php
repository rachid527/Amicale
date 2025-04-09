<div>
    <table class="table is-hoverable is-fullwidth">
        <thead>
            <tr>
                <th>#</th>
                <th>Titre</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($Activities as $Activity)
              
            <tr>
                    <td>{{ $Activity->id }}</td>
                    <td><a href="{{ route('activities.show', $Activity->id) }}">{{ $Activity->titre }} </a></td>
                    <td>{{ $Activity->prix }}</td>
                   
                    
                </tr>
            
            @endforeach
        </tbody>
    </table>
</div>
