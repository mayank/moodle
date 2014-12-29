<div class="navbar navbar-inverse">

<div class="container">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a class="navbar-brand" href="{{ url('dashboard') }}">Moodle</a>
    </div>


    <div class="navbar-collapse collapse navbar-responsive-collapse">
      <ul class="nav navbar-nav">
        
        <li {{ isset($tutorials) ? 'class="active"' : '' }}>
          <a href="{{ url('tutorials') }}">Tutorials</a>
        </li>
        
        <li {{ isset($assignments) ? 'class="active"' : '' }}>
          <a href="{{ url('assignments') }}">Assignments</a>
        </li>
        
        <li {{ isset($syllabus) ? 'class="active"' : '' }}>
          <a href="{{ url('courses') }}">Syllabus</a>
        </li>
        
        <li>
          <a href="{{ url('interviews') }}">Interview Corner</a>
        </li> 

        <li {{ isset($forum) ? 'class="active"' : '' }}>
          <a href="{{ url('forums') }}">QA Forums</a>
        </li>

        <li {{ isset($compiler) ? 'class="active"' : '' }}>
          <a href="{{ url('compiler') }}">Compiler</a>
        </li>

        <li>
          <a href="{{ url('results') }}">Results</a>
        </li>

      </ul>

    </div>
  </div>
</div>