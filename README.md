# PHP coding test

Simple php test to create and display employee profile

## Follow these steps
1. Fork this repository into your GitHub account (You can create a GitHub account if you don't have one)
2. Clone the repository from your repository
3. Checkout main branch
4. Commit your changes with the code for below question
5. Upload screen interface as image
6. Add ```MYwavePSSD``` as collaborators

## Task
1. Create a form to add new employee

    ```
    Employee Name
    Gender
    Martial Status
    Phone No.
    Email
    Address
    Date of birth
    Nationality
    Hire Date
    Department
    ```
    - You can add any other field that is relevant.
    - Add validation to the input for both frontend and backend
    - Implement REST API to pass data
    - After validation, if form is valid, save into json or csv
  
    - Answer
    ```
    <form action="submit.php" method="POST" id="employeeForm">
            <div class="form-group">
                <label for="name">Employee Name:</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="gender">Gender:</label>
                <select id="gender" name="gender" required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>

            <div class="form-group">
                <label for="marital_status">Marital Status:</label>
                <select id="marital_status" name="marital_status" required>
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                    <option value="Divorced">Divorced</option>
                    <option value="Widowed">Widowed</option>
                </select>
            </div>

            <div class="form-group">
                <label for="phone">Phone No.:</label>
                <input type="tel" id="phone" name="phone" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="address">Address:</label>
                <textarea id="address" name="address" rows="4" required></textarea>
            </div>

            <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob" required>
            </div>

            <div class="form-group">
                <label for="nationality">Nationality:</label>
                <input type="text" id="nationality" name="nationality" required>
            </div>

            <div class="form-group">
                <label for="hire_date">Hire Date:</label>
                <input type="date" id="hire_date" name="hire_date" required>
            </div>

            <div class="form-group">
                <label for="department">Department:</label>
                <input type="text" id="department" name="department" required>
            </div>

            <input type="submit" value="Add Employee">
        </form>
    ```

2. Show all employee profile pulled from json or csv in a new screen

   ![List employee](https://github.com/user-attachments/assets/e01c64cb-7d19-429e-ab5f-b34e1cf45c3b)

   ![List employee json](https://github.com/user-attachments/assets/58ad72b8-b362-4e7d-9adb-6aa808a185d0)



## Language
- Frontend
    - Normal HTML5 and css or REACT 

- Backend
    - Normal PHP or LARAVEL

## BONUS POINT

- Clean code and good practise
- Good UI UX

