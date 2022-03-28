#From https://github.com/bgres/xss-demo

# xss-demo
Minimal, flask-powered python web app to demonstrate reflected and stored XSS attacks.
Less than 30 lines of Python + 40 lines HTML template.
# Quickstart

* Clone this repository.
* Create a [virtual environment](https://virtualenvwrapper.readthedocs.io/) (if you don't want to install `flask` in your global python environment) and 
  activate it.
* `pip install flask`
* `FLASK_ENV=development flask run`
* Open [127.0.0.1:5000](http://127.0.0.1:5000/) in your webbrowser.

As you started the flask app in development mode, any source changes should apply immediately so you can just refresh
the page. If you want to clear the database, just delete the `database.db` file that is (re-)created on first use.
