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
                <!-- Navbar Contents -->


                 <!-- Current Tasks -->
    @if (count($parcours) > 0)
        <div>
            <div>
                Current parcours
            </div>

            <div>
                <table>

                    <!-- Table Headings -->
                    <thead>
                        <th>parcours</th>
                        
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        @foreach ($parcours as $parcour)
                            <tr>
                                <!-- Task Name -->
                                <td class="table-text">
                                    <div>{{ $parcours->id_parcours }}</div>
                                </td>

                                <td>
                                    <!-- TODO: Delete Button -->
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
            </nav>
        </div>

        
    </body>
</html>