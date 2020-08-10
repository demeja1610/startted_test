<svg 
  viewBox="0 0 20 12" 
  xmlns="http://www.w3.org/2000/svg"
  @if(isset($class)) class="{{$class}}" @endif
  @if(isset($color)) fill="{{$color}}" @endif
  @if(isset($width)) width="{{$width}}" @endif
  @if(isset($height)) height="{{$height}}" @endif
>
  <path d="M19.894 10.5997C19.8698 10.5475 19.8472 10.5042 19.8262 10.4695C19.4792 9.84454 18.8161 9.07745 17.8373 8.16801L17.8166 8.14718L17.8063 8.13697L17.7958 8.1265H17.7853C17.341 7.70302 17.0597 7.41828 16.9419 7.2725C16.7264 6.9948 16.6781 6.7137 16.7959 6.42889C16.8791 6.2137 17.1918 5.75926 17.7331 5.06493C18.0178 4.69696 18.2433 4.40204 18.4099 4.17985C19.611 2.58308 20.1317 1.56273 19.9719 1.11838L19.9099 1.01455C19.8682 0.952031 19.7606 0.894842 19.5872 0.842687C19.4135 0.79064 19.1914 0.782033 18.9206 0.816719L15.9217 0.837435C15.8731 0.82022 15.8037 0.821824 15.7134 0.842687C15.6231 0.863549 15.5779 0.874017 15.5779 0.874017L15.5257 0.900095L15.4843 0.931424C15.4496 0.952141 15.4114 0.988577 15.3697 1.04066C15.3282 1.09256 15.2936 1.15347 15.2658 1.22288C14.9393 2.06287 14.5681 2.84386 14.1515 3.5658C13.8946 3.99628 13.6587 4.36936 13.4433 4.68525C13.2281 5.00103 13.0476 5.23369 12.9019 5.38282C12.756 5.5321 12.6244 5.6517 12.5061 5.74204C12.3881 5.83242 12.298 5.87061 12.2355 5.85664C12.173 5.84267 12.1141 5.82881 12.0583 5.81495C11.9612 5.75243 11.8831 5.66742 11.8242 5.55982C11.765 5.45223 11.7252 5.31681 11.7044 5.15367C11.6836 4.99041 11.6714 4.85 11.6679 4.73193C11.6646 4.61402 11.6661 4.44723 11.6732 4.23204C11.6804 4.01674 11.6836 3.87107 11.6836 3.7947C11.6836 3.53086 11.6888 3.24451 11.6991 2.93559C11.7096 2.62667 11.7181 2.3819 11.7252 2.20158C11.7323 2.02108 11.7356 1.83011 11.7356 1.62878C11.7356 1.42745 11.7233 1.26956 11.6991 1.15496C11.6752 1.04051 11.6385 0.929418 11.5901 0.821715C11.5414 0.714121 11.4701 0.630891 11.3766 0.571805C11.2829 0.512793 11.1664 0.465962 11.0278 0.431167C10.6598 0.3479 10.1912 0.302857 9.62185 0.295854C8.33069 0.281995 7.50105 0.365371 7.13311 0.545873C6.98733 0.622137 6.85541 0.726339 6.73746 0.858151C6.61247 1.01093 6.59504 1.09431 6.68527 1.10802C7.10186 1.17043 7.39677 1.31971 7.57035 1.55572L7.6329 1.68079C7.68155 1.77102 7.73013 1.93077 7.77875 2.15982C7.8273 2.38887 7.85863 2.64224 7.87241 2.9198C7.90706 3.42666 7.90706 3.86053 7.87241 4.22146C7.83765 4.58254 7.80483 4.86364 7.7735 5.06496C7.74217 5.26629 7.69534 5.42943 7.6329 5.55435C7.57035 5.67931 7.52873 5.75568 7.50787 5.7834C7.48704 5.81112 7.46968 5.82859 7.4559 5.83545C7.36566 5.87002 7.27182 5.88764 7.17469 5.88764C7.07742 5.88764 6.95947 5.83898 6.82065 5.74175C6.68188 5.64451 6.53785 5.51095 6.38856 5.34084C6.23928 5.1707 6.07093 4.93293 5.88342 4.62751C5.69606 4.32209 5.50166 3.96112 5.30033 3.54461L5.13376 3.24254C5.02963 3.04822 4.88739 2.76526 4.70689 2.39394C4.52628 2.02246 4.36664 1.66314 4.22786 1.31603C4.17238 1.17025 4.08904 1.05926 3.97799 0.982887L3.92587 0.951557C3.89122 0.923838 3.8356 0.894405 3.7593 0.863038C3.68289 0.831708 3.60316 0.809241 3.51978 0.795418L0.666572 0.816135C0.375011 0.816135 0.177184 0.882186 0.073018 1.01411L0.0313299 1.07651C0.0105041 1.11127 0 1.16678 0 1.24319C0 1.31956 0.0208258 1.4133 0.0625139 1.52429C0.47903 2.50321 0.931983 3.4473 1.42137 4.3567C1.91076 5.26611 2.33603 5.99866 2.69692 6.5537C3.05789 7.10914 3.42583 7.63336 3.80073 8.1261C4.17563 8.61903 4.42379 8.93492 4.54521 9.0737C4.66677 9.21273 4.76225 9.31668 4.83166 9.38608L5.09204 9.63596C5.25865 9.8026 5.5033 10.0022 5.82612 10.2347C6.14901 10.4673 6.50648 10.6964 6.89871 10.9222C7.291 11.1476 7.74739 11.3316 8.2681 11.4739C8.78875 11.6163 9.2955 11.6735 9.78842 11.6459H10.986C11.2288 11.6249 11.4128 11.5485 11.5379 11.4167L11.5793 11.3645C11.6072 11.3231 11.6333 11.2587 11.6573 11.1721C11.6817 11.0853 11.6938 10.9897 11.6938 10.8858C11.6867 10.5873 11.7094 10.3183 11.7614 10.0788C11.8133 9.83944 11.8724 9.65893 11.9386 9.53737C12.0047 9.41592 12.0793 9.31343 12.1624 9.23034C12.2456 9.14708 12.3049 9.09664 12.3397 9.07928C12.3743 9.06181 12.4019 9.04995 12.4227 9.04284C12.5893 8.98733 12.7854 9.04109 13.0112 9.20438C13.2369 9.36752 13.4486 9.56896 13.6465 9.80836C13.8444 10.048 14.0821 10.3168 14.3597 10.6153C14.6376 10.9138 14.8805 11.1358 15.0886 11.2818L15.2968 11.4067C15.4359 11.4901 15.6164 11.5665 15.8386 11.6359C16.0604 11.7053 16.2547 11.7226 16.4215 11.6879L19.0872 11.6464C19.3509 11.6464 19.556 11.6027 19.7015 11.5161C19.8474 11.4293 19.934 11.3337 19.9619 11.2297C19.9898 11.1256 19.9913 11.0075 19.9672 10.8755C19.9425 10.7438 19.9182 10.6517 19.894 10.5997Z"/>
</svg>
