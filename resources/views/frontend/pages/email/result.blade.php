<html>

    <body>
    <table border="1">
        <tbody>
        <tr>
            <td>First Name</td>
            <td>{{ $resultRegistration->first_name }}</td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td>{{ $resultRegistration->last_name }}</td>
        </tr>
        <tr>
            <td>Email Address</td>
            <td>{{ $resultRegistration->email }}</td>
        </tr>
        <tr>
            <td>Mobile Number</td>
            <td>{{ $resultRegistration->mobile }}</td>
        </tr>
        <tr>
            <td>Position for apply</td>
            <td>{{ $resultRegistration->designation->title }}</td>
        </tr>
        <tr>
            <td>Current CTC</td>
            <td>{{ $resultRegistration->current_ctc }}</td>
        </tr>
        <tr>
            <td>Expected CTC</td>
            <td>{{ $resultRegistration->expected_ctc }}</td>
        </tr>
        <tr>
            <td>If selected, how soon you can join?</td>
            <td>{{ $resultRegistration->can_join_in }}</td>
        </tr>
        <tr>
            <td>Number of Question</td>
            <td>{{ $resultRegistration->designation->number_of_question }}</td>
        </tr>
        <tr>
            <td>Attempted</td>
            <td>{{ $attempted }}</td>
        </tr>
        <tr>
            <td>Total Marks</td>
            <td>{{ $resultRegistration->designation->number_of_question }}</td>
        </tr>
        <tr>
            <td>Obtained Marks</td>
            <td>{{ $total_marks }}</td>
        </tr>
        </tbody>
    </table>
    </body>
</html>
