def validate_password(password):
    """Validate the password."""
    # Add your password validation logic here
    return len(password) >= 8

def authenticate_user(username, password, users):
    """Authenticate the user."""
    if username in users and users[username] == password:
        return True
    return False

def change_password(username, current_password, new_password, users):
    """Change the user's password."""
    if username in users and users[username] == current_password:
        users[username] = new_password
        return True
    return False
