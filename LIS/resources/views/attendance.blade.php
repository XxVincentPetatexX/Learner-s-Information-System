@extends('layouts.app4')
@section('content')
<link rel="stylesheet" href="/css/attendance.css">
<h3>Drop-Down list search using Datalist</h3>
<h4>Input your favorite Text Editor</h4>
<input list=text_editors>
<button>▼</button>
<datalist id="text_editors">
    <select multiple size=8>
      <option value="Atom">Atom
      <option value="Brackets">Brackets
      <option value="Notepad ++">Notepad ++
      <option value="Notepad">Notepad
      <option value="Sublime Text">Sublime Text
      <option value="TextEdit">TextEdit
      <option value="TextMate">TextMate
      <option value="Wordpad">Wordpad
    </select>
  </datalist>

  <script type="text/javascript">

  </script>
@endsection('content')
