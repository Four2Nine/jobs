import React, { Component } from 'react';
import PropTypes from 'prop-types';
import { withStyles, createStyleSheet } from 'material-ui/styles';
import BottomNavigation, { BottomNavigationButton } from 'material-ui/BottomNavigation';
import PhoneIcon from 'material-ui-icons/Phone';
import EmailIcon from 'material-ui-icons/Email';

const styleSheet = createStyleSheet('SimpleBottomNavigation', {
    root: {
        width: 500,
        backgroundColor: "black",
    },
});

class SimpleBottomNavigation extends Component {
    state = {
        value: 0,
    };

    handleChange = (event, value) => {
        this.setState({ value });
    };

    render() {
        const classes = this.props.classes;
        const { value } = this.state;

        return (
            <div className={classes.root}>
                <BottomNavigation value={value} onChange={this.handleChange} showLabels>
                    <BottomNavigationButton label="使用手机注册" icon={<PhoneIcon />} />
                    <BottomNavigationButton label="使用邮箱注册" icon={<EmailIcon />} />
                </BottomNavigation>
            </div>
        );
    }
}

SimpleBottomNavigation.propTypes = {
    classes: PropTypes.object.isRequired,
};

export default withStyles(styleSheet)(SimpleBottomNavigation);
