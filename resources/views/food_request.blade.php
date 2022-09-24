<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Food Request') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                {{-- <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div> --}}
                <form>
                    <br>
                    <label for="cars">Choose a day</label>

                        <select name="day" id="day">
                            <option value="sunday">Sunday</option>
                            <option value="monday">Monday</option>
                            <option value="tuesday">Tuesday</option>
                            <option value="wednesday">Wednesday</option>
                            <option value="thursday">Thursday</option>
                        </select>
<br>
                        <p>Meal Type</p>
                                <input type="radio" id="breakfast" name="meal_time" value="breakfast">
                                <label for="lunch">Breakfast</label><br>
                                <input type="radio" id="lunch" name="meal_time" value="lunch">
                                <label for="lunch">Lunch</label><br>
<br>
                    <label for="date">Select date:</label><br>
                    <input type="date" id="date" name="date" value="date"><br>
                    <br><label for="option">Choosen option from menu:</label><br>
                    <input type="text" id="option" name="option" ><br>
                   <br> <label for="meal_number">Number of meals you want to request:</label><br>
                    <input type="text" id="option" name="number of meals" value="1" >
                    <br><br><input type="submit" value="submit" style="border-style:solid; border-color:green;">
                  </form>
                    </div>
                    
            </div>
        </div>
    </div>
</x-app-layout>
