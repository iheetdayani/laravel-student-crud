<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Edit Student</title>

  <link rel="stylesheet" href="{{ asset('bootstrap-5.0.2-dist/css/bootstrap.min.css') }}">
</head>

<body class="bg-light">

  <div class="container mt-5">

    <div class="row justify-content-center">

      <div class="col-md-7">

        <div class="card shadow-lg">

          <!-- Header -->
          <div class="card-header bg-primary text-white text-center">
            <h4 class="mb-0">Edit Student</h4>
          </div>

          <!-- Body -->
          <div class="card-body p-4">

            <form action="{{ route('student.update', $student->id) }}" method="POST">

              @csrf
              @method('PUT')

              <!-- Name -->
              <div class="mb-3">

                <label class="form-label">
                  Name
                </label>

                <input type="text" name="name" value="{{ $student->name }}" class="form-control" required>

              </div>

              <!-- Course -->
              <div class="mb-3">

                <label class="form-label">
                  Course
                </label>

                <select name="course" class="form-select" required>

                  <option value="MCA" {{ $student->course == 'MCA' ? 'selected' : '' }}>
                    MCA
                  </option>

                  <option value="PGDCA" {{ $student->course == 'PGDCA' ? 'selected' : '' }}>
                    PGDCA
                  </option>

                  <option value="MSCAIML" {{ $student->course == 'MSCAIML' ? 'selected' : '' }}>
                    MSCAIML
                  </option>

                  <option value="STATICS" {{ $student->course == 'STATICS' ? 'selected' : '' }}>
                    STATICS
                  </option>

                </select>

              </div>

              <!-- Email -->
              <div class="mb-4">

                <label class="form-label">
                  Email
                </label>

                <input type="email" name="Email" value="{{ $student->Email }}" class="form-control" required>

              </div>

              <!-- Button -->
              <div class="d-grid">

                <button type="submit" name="Update" class="btn btn-primary">
                  Update Student
                </button>

              </div>

            </form>

          </div>

        </div>

      </div>

    </div>

  </div>

</body>

</html>