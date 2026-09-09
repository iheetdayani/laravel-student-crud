<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Student System</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{ asset('bootstrap-5.0.2-dist/css/bootstrap.min.css') }}">
</head>

<body>

  <div class="container mt-5">

    <!-- Heading -->
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h2>Student List</h2>

      <a href="{{ route('student.create') }}" class="btn btn-primary">
        Add Student
      </a>
    </div>
    <!-- Student Table -->
    <div class="card shadow">

      <div class="card-body">

        <table class="table table-bordered table-striped table-hover">

          <thead class="table-dark">

            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Course</th>
              <th>Email</th>
              <th>Action</th>
            </tr>

          </thead>

          <tbody>

            @foreach($Students as $student)

              <tr>

                <td>
                  {{ $student->id }}
                </td>

                <td>
                  {{ $student->name }}
                </td>

                <td>
                  {{ $student->course }}
                </td>

                <td>
                  {{ $student->Email }}
                </td>

                <td>

                  <!-- Edit -->
                  <a href="{{ route('student.edit', $student->id) }}" class="btn btn-warning btn-sm">
                    EDIT
                  </a>

                  <!-- Delete -->
                  <form action="{{ route('student.destroy', $student->id) }}" method="POST" class="d-inline">

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger btn-sm"
                      onclick="return confirm('Are you sure you want to delete this student?')">
                      DELETE
                    </button>

                  </form>

                </td>

              </tr>

            @endforeach

          </tbody>

        </table>

      </div>

    </div>

  </div>

</body>

</html>