import React, {Fragment} from 'react';
import ReactDom from 'react-dom';
import AppContainer from "./components/App/AppContainer";


ReactDom.render(<Fragment>
        <AppContainer />
    </Fragment>,
    document.getElementById('sprint-app')
)
