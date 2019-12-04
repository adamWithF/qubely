import '../css/iconlist.scss'
const { __ } = wp.i18n
const { Component, Fragment } = wp.element
import Toggle from './Toggle'
import Color from './Color'
// import IconListData from './assets/IconListData'
import Free from './assets/icons/Free'
import Brand from './assets/icons/Brand'
import Light from './assets/icons/Light'
import Regular from './assets/icons/Regular'
import Solid from './assets/icons/Solid'

class IconList extends Component {

    constructor(props) {
        super(props)
        this.state = {
            isOpen: false,
            filterText: '',
            showIcons: false
        }
    }

    get_font(){
        let data = Brand.map(x => 'fab fa-'+x);
        if (qubely_admin.fontawesome){
            const _solid = Solid.map(x => 'fas fa-'+x);
            const _light = Light.map(x => 'fal fa-'+x);
            const _regular = Regular.map(x => 'far fa-'+x);
            data = data.concat(_solid)
            data = data.concat(_light)
            data = data.concat(_regular)
            return data
        } else {
            data = data.concat(Free)
            return data
        }
    }

    render() {
        const { value, disableToggle, colorSettings, iconColor, onColorChange } = this.props
        const { filterText } = this.state
        var finalData = [];
        if (filterText.length > 2) {
            this.get_font().forEach(name => {
                if (name.includes(filterText)) {
                    finalData.push(name)
                }
            })
        } else {
            finalData = this.get_font();
        }
        return (
            <div className={`qubely-field qubely-field-icon-list ${disableToggle ? '' : 'qubely-toggle-enabled'}`}>
                {this.props.label &&
                    <Fragment>
                        {!disableToggle ?
                            <Toggle label={this.props.label} className={'qubely-icon-list-toggle'} value={this.props.value ? true : false} onChange={() => this.props.onChange(this.props.value ? '' : ' ')} />
                            :
                            <label>{this.props.label}</label>
                        }
                    </Fragment>
                }
                {colorSettings && <Color label={__(' Color')} value={iconColor || '#ccc'} onChange={(color) => onColorChange(color)} />}

                {(disableToggle || this.props.value != '') &&
                    <div className="qubely-icon-list-wrapper">
                        <input type="text" value={this.state.filterText} placeholder="Search..." onChange={e => this.setState({ filterText: e.target.value })} autoComplete="off" />
                        <div className="qubely-icon-list-icons">
                            {finalData.map(name => { return (<span className={value == name ? 'qubely-active' : ''} onClick={e => { this.props.onChange(name) }}><span className={name} /></span>) })}
                        </div>
                    </div>
                }
            </div>
        )
    }
}
export default IconList