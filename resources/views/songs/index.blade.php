@extends('layouts.main')

@section('content')

<h1>Songs</h1>
    <div class="row">
        <table>
            <thead>
                <tr>
                <th class="RowID">Song ID</th>
                <th>Artist</th>
                <th>Title</th>
                <th>Year</th>
                <th>Lead</th>
                </tr>
            </thead>
            <tbody>
            <?php
            foreach ($songs as $song) {
                echo "<tr>";
                echo "<td class='RowID'>" . $song['SongID'] . "</td>";
                echo "<td class='artist'>" . $song['Artist'] . "</td>";
                echo "<td class='title'>" . html_entity_decode($song['Title']) . "</td>";
                echo "<td class='year'>" . $song['Year'] . "</td>";
                echo "<td class='lead'>" . $song['Lead'] . "</td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
@endsection
