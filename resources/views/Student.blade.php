<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Add Student</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{ asset('bootstrap-5.0.2-dist/css/bootstrap.min.css') }}">
</head>

<body class="bg-light">

  <div class="container py-5">

    <div class="row justify-content-center">

      <div class="col-md-7 col-lg-6">

        <div class="card shadow-lg border-0">

          <!-- Header -->
          <div class="card-header bg-primary text-white text-center py-3">
            <h4 class="mb-0">Add Student</h4>
          </div>

          <!-- Form -->
          <div class="card-body p-4">

            <form action="{{ route('student.store') }}" method="POST">

              @csrf

              <!-- Name -->
              <div class="mb-3">
                <label class="form-label">
                  Name
                </label>

                <input type="text" name="name" class="form-control" placeholder="Enter student name" required>
              </div>

              <!-- Course -->
              <div class="mb-3">
                <label class="form-label">
                  Course
                </label>

                <select name="course" class="form-select" required>

                  <option value="" selected disabled>
                    Select Course
                  </option>

                  <option value="MCA">
                    MCA
                  </option>

                  <option value="PGDCA">
                    PGDCA
                  </option>

                  <option value="MSCAIML">
                    MSCAIML
                  </option>

                  <option value="STATICS">
                    STATICS
                  </option>

                </select>
              </div>

              <!-- Email -->
              <div class="mb-4">
                <label class="form-label">
                  Email
                </label>

                <input type="email" name="Email" class="form-control" placeholder="Enter email address" required>
              </div>

              <!-- Submit -->
              <div class="d-grid">
                <button type="submit" class="btn btn-primary">
                  Add Student
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