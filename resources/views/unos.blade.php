@extends('master')
@section('title')
@endsection



@section('content')





<form method="POST" action="#">
    {{csrf_field()}}
    
    <div class="form-group">
        <label for="title">Naslov</label>
        <input type="text" class="form-control" id="naslov" name="naslov"
        aria-describedby="title" placeholder="Unesi novi film">
    </div>

    
    <label for="zanr">Odaberi žanr:</label>
    <select name="zanr" id="zanr">
        <option value="#">Akcija</option>
        <option value="#">Avantura</option>
        <option value="#">Komedija</option>
        <option value="#">Drama</option>
        <option value="#">Fantazija</option>
        <option value="#">Misterija</option>
        <option value="#">Horor</option>
        <option value="#">Romantika</option>
        <option value="#">Triler</option>

    </select>

    <div class="form-group">
        <label for="title">Godina</label>
        <input type="number" class="form-control" id="godina" name="godina"
        aria-describedby="title" min="1900" placeholder="Unesi godinu filma">
    </div>
    

    <div class="form-group">
        <label for="time">Trajanje filma</label>
        <textarea class="form-control" id="trajanje" rows="3" name="trajanje" 
        placeholder="Unesi broj minuta trajanja filma"></textarea>
    </div>
    

    <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection