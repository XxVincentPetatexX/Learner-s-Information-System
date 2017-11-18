@extends('layouts.app4')
@section('content')
<link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet' type='text/css'>
<link href="https://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet">
<div id="content">
<link rel="stylesheet" href="/css/learner2.css">
    <h1>Learner's Form</h1>

    <form action=" " method="post" autocomplete="on">
        <p>
            <label for="username" class="">First Name
                <span class="required">*</span>
            </label>
            <input type="text" name="username" id="username" required="required" placeholder="Your First Name" />
        </p>

        <p>
            <label for="username" class=""> Middle Name
                <span class="required">*</span>
            </label>
            <input type="text" name="username" id="username" required="required" placeholder="Your Middle Name" />
        </p>

        <p>
            <label for="username" class=""> Surname
                <span class="required">*</span>
            </label>
            <input type="text" name="username" id="username" required="required" placeholder="Your Surname" />
        </p>

        <p>
            <label for="username" class=""> Learner's Number
                <span class="required">*</span>
            </label>
            <input type="text" name="username" id="username" required="required" placeholder="12 digits" />
        </p>

        <p>
            <label for="username" class=""> Grade
                <span class="required">*</span>
            </label>
            <input type="text" name="username" id="username" required="required" placeholder="Your Grade Level" />
        </p>

        <p>
            <label for="username" class=""> Section
                <span class="required">*</span>
            </label>
            <input type="text" name="username" id="username" required="required" placeholder="Your Section Code" />
        </p>

        <p>
            <label for="username" class=""> Gender
                <span class="required">*</span>
            </label>
            <input type="text" name="username" id="username" required="required" placeholder="Male/Female/Other" />
        </p>

        <p>
            <label for="username" class=""> Birth Date
                <span class="required">*</span>
            </label>
            <input type="text" name="username" id="username" required="required" placeholder="Month/Date/Year" />
        </p>


        <p>
            <label for="subject" class=""> Religion</label>
            <input type="text" name="subject" id="subject" placeholder="Christian/Islam/Others" />
        </p>

        <p>
            <label for="username" class=""> Citizenship
                <span class="required">*</span>
            </label>
            <input type="text" name="username" id="username" required="required" placeholder="Your Citizenship" />
        </p>

        <p>
            <label for="username" class=""> Age
                <span class="required">*</span>
            </label>
            <input type="text" name="username" id="username" required="required" placeholder="Enter your Age" />
        </p>


        <p class="indication">Fields with
            <span class="required"> * </span>are required</p>

            <div class="text-center">
           <button type="" class="button button-style button-style-dark button-style-color-2">Submit</button>
            </div>

      <script>
      function myFunction() {
          alert("I am an alert box!");
      }
      </script>


    </form>
</div>
@endsection('content')
