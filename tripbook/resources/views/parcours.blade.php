<!-- resources/views/parcours.blade.php -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Les parcours - TripBook</title>

        <!-- CSS And JavaScript -->
    </head>

    <body>
        <div class="header">
            <nav class="footer">
               <p> Liste des parcours !! </p>

                @foreach ($parcours as $parcour)
                            <tr>
                                <!-- Task Name -->
                                <td class="table-text">
                                    <div>{{ $parcour-> nom_parcours }}</div>
                                </td>

                                <td>
                                    <!-- TODO: Delete Button -->
                                </td>
                            </tr>
                        @endforeach

            </nav>
        </div>

        
    </body>
</html>