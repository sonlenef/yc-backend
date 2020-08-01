import React from 'react';
import { BrowserRouter as Router, Route, Switch } from 'react-router-dom';
import { PrivateRoute } from '../PrivateRoute';
import { LoginPage } from '../LoginPage';
import { AdminPage } from '../AdminPage';
import { ErrorPage } from '../ErrorPage';

class App extends React.Component {
    render() {
        return (
            <div>
                <Router>
                    <Switch>
                        <PrivateRoute exact path="/admin/" component={AdminPage} />
                        <Route path="/admin/login" component={LoginPage} />
                        <Route component={ErrorPage} />
                    </Switch>
                </Router>
            </div>
        );
    }
}

export { App }; 