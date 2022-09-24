<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                {{-- <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div> --}}
                <head>
                    <style>
                    #customers {
                      font-family: Arial, Helvetica, sans-serif;
                      border-collapse: collapse;
                      width: 100%;
                    }
                    
                    #customers td, #customers th {
                      border: 1px solid #ddd;
                      padding: 8px;
                    }
                    
                    #customers tr:nth-child(even){background-color: #f2f2f2;}
                    
                    #customers tr:hover {background-color: #ddd;}
                    
                    #customers th {
                      padding-top: 12px;
                      padding-bottom: 12px;
                      text-align: left;
                      background-color: #04AA6D;
                      color: white;
                    }
                    </style>
                    </head>
                    <body>
                    
                    <h1> Bill</h1>
                    
                    <table id="customers">
                      <tr>
                        <th>Date</th>
                        <th>Meal Time</th>
                        <th>Bill</th>
                      </tr>
                      <tr>
                        <td>2022/03/02</td>
                        <td>Breakfast</td>
                        <td>100</td>
                      </tr>
                      <tr>
                        <td>2022/03/02</td>
                        <td>Breakfast</td>
                        <td>700</td>
                      </tr>
                      <tr>
                        <td>2022/03/01</td>
                        <td>Breakfast</td>
                        <td>800</td>
                      </tr><tr>
                        <td>2022/02/23</td>
                        <td>Breakfast</td>
                        <td>900</td>
                      </tr><tr>
                        <td>2022/02/21</td>
                        <td>Breakfast</td>
                        <td>1000</td>
                      </tr>
                      <tr>
                        <td>2022/02/02</td>
                        <td>Breakfast</td>
                        <td>176</td>
                      </tr>
                    </table>
                    
            </div>
        </div>
    </div>
</x-app-layout>
