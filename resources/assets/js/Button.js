import React from 'react';
import PropTypes from 'prop-types';
import { withStyles, createStyleSheet } from 'material-ui/styles';
import Button from 'material-ui/Button';

const styleSheet = createStyleSheet('RaisedButtons', theme => ({
    button: {
        margin: theme.spacing.unit,
        background: 'linear-gradient(45deg, #FE6B8B 30%, #FF8E53 90%)',
        borderRadius: 3,
        border: 0,
        color: 'white',
        boxShadow: '0 3px 5px 2px rgba(255, 105, 135, .30)',
    },
    input: {
        display: 'none',
    },
}));

function RaisedButtons(props) {
    const classes = props.classes;
    return (
        <div>
            <Button raised className={classes.button}>
                Default
            </Button>
            <Button raised color="primary" className={classes.button}>
                Primary
            </Button>
            <Button raised color="accent" className={classes.button}>
                Accent
            </Button>
            <Button raised color="contrast" className={classes.button}>
                Contrast
            </Button>
            <Button raised color="accent" disabled className={classes.button}>
                Disabled
            </Button>
            <input accept="jpg,jpeg,JPG,JPEG" className={classes.input} id="file" multiple type="file" />
            <label htmlFor="file">
                <Button raised component="span" className={classes.button}>
                    Upload
                </Button>
            </label>
            <Button raised dense className={classes.button}>
                Dense
            </Button>
        </div>
    );
}

RaisedButtons.propTypes = {
    classes: PropTypes.object.isRequired,
};

export default withStyles(styleSheet)(RaisedButtons);
