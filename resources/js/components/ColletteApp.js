import React, { Component } from 'react';
import ReactDOM from 'react-dom';

function RenderCards(props){
    return props.posts.map(post => {
        return(
            <div key={post.id} class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        {post.title}
                    </h5>
                    <p class="card-text">{post.body}</p>
                    <a href="#" class="btn btn-primary">View More</a>
                </div>
            </div>
        );
    });
}

export default class ColletteApp extends Component {
    constructor(){
        super();
        this.state = {
            posts: []
        }
    }

    componentDidMount(){
        axios
            .get('/api/get/')
            .then((res) => {
                this.setState({
                    posts: res.data
                });
            })
            .catch(error => {
                console.log(error)
            })
    }

    render() {
        return (
            <React.Fragment>
                <RenderCards posts={this.state.posts} />
            </React.Fragment>
        );
    }
}

ReactDOM.render(<ColletteApp />, document.getElementById('colletteApp'));
