@extends('layouts.default  ')

@section('content')



    <<!DOCTYPE html>
    <html>
    <head>
        <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even)
        </style>
    </head>
    <body>

    <h2>HTML Table</h2>

    <table>
        <tr>
            <th>Contact Message</th>
            <th>action</th>

        </tr>
        <tr>
            <td><a href="/bscontact"> contact message </a></td>

            <td>
                <div class="card mt-3 pl-2 pr-2" align="center">
                    <form>
                        <div class="card">
                            <div class="card-title"><h1></h1>
                            </div>
                            <div class="card-body">
                                <button type="Delete" class="btn btn-primary mb-2">Delete</button>
                            </div>
                        </div>
                    </form>
            </td>

    </table>

    </body>
    </html>






@endsection