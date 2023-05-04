<script>
import "../../css/master.css";
</script>

<template>
    <header class="header">
        <div class="logoBx">
            <span class="icon w-8 h-8" style="var(--black-100)">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    class="bi bi-facebook"
                    viewBox="0 0 16 16"
                >
                    <path
                        d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"
                    />
                </svg>
            </span>
            <div class="searchBx">
                <div class="fieldBx">
                    <input type="text" class="field" />
                </div>
                <div
                    class="iconBx w-6 h-6"
                    onclick="document.querySelector('.fieldBx').classList.toggle('active')"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor"
                        class="bi bi-search"
                        viewBox="0 0 16 16"
                    >
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"
                        />
                    </svg>
                </div>
            </div>
        </div>
        <ul class="navigationBx">
            <li class="list active">
                <a href="#" class="link">
                    <span class="icon w-6 h-6"
                        ><svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor"
                            class="bi bi-house-door-fill"
                            viewBox="0 0 16 16"
                        >
                            <path
                                d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"
                            />
                        </svg>
                    </span>
                </a>
            </li>
            <li class="list">
                <a href="#" class="link">
                    <span class="icon w-6 h-6">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor"
                            class="bi bi-people-fill"
                            viewBox="0 0 16 16"
                        >
                            <path
                                d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"
                            />
                            <path
                                fill-rule="evenodd"
                                d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"
                            />
                            <path
                                d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"
                            />
                        </svg>
                    </span>
                </a>
            </li>
            <li class="list">
                <a href="#" class="link">
                    <span class="icon w-6 h-6"
                        ><svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor"
                            class="bi bi-tv-fill"
                            viewBox="0 0 16 16"
                        >
                            <path
                                d="M2.5 13.5A.5.5 0 0 1 3 13h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zM2 2h12s2 0 2 2v6s0 2-2 2H2s-2 0-2-2V4s0-2 2-2z"
                            />
                        </svg>
                    </span>
                </a>
            </li>
            <li class="list">
                <a href="#" class="link">
                    <span class="icon w-6 h-6">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor"
                            class="bi bi-bag-fill"
                            viewBox="0 0 16 16"
                        >
                            <path
                                d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5z"
                            />
                        </svg>
                    </span>
                </a>
            </li>
        </ul>
        <div class="profileBx">
            <div class="profile-photo">
                <img src="/public/assets/img/photo.jpg" class="photo" />
            </div>
        </div>
    </header>
</template>

<style scoped>
.header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    padding: 8px 100px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: var(--white-100);
    z-index: 5;
}

.header .navigationBx {
    position: relative;
    display: flex;
    gap: 25px;
}

.header .navigationBx .list {
    position: relative;
    list-style: none;
}

.header .navigationBx .list.active::before {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 24px;
    height: 2px;
    border-radius: 8px;
    background: var(--blue-300);
}

.header .navigationBx .list .link {
    text-decoration: none;
    color: transparent;
    stroke-width: 0.8px;
    stroke: var(--black-200);
}

.header .navigationBx .list.active .link {
    color: var(--blue-300);
    stroke-width: 0px;
    stroke: transparent;
}

.header .logoBx {
    position: relative;
    display: flex;
    align-items: center;
    gap: 15px;
}

.header .logoBx .icon {
    display: flex;
    align-items: center;
}

.header .logoBx .icon {
    color: var(--blue-300);
}

.header .searchBx {
    position: relative;
    display: flex;
    align-items: center;
    border-radius: 8px;
}

.searchBx .fieldBx {
    position: relative;
    width: 0;
    background: #fff;
    transition: 0.5s;
    overflow: hidden;
}

.fieldBx .field {
    outline: none;
    border: 1px solid #ddd;
    position: relative;
    width: 100%;
    padding: 5px 10px;
    padding-left: 45px;
    font-size: 1em;
    color: var(--black-200);
    border-radius: 24px;
}

.searchBx.active .fieldBx {
    width: 300px;
}

.searchBx .iconBx {
    position: absolute;
    width: 18px;
    height: 18px;
    line-height: 18px;
    color: var(--black-200);
    display: flex;
    justify-content: center;
    align-items: center;
    transition: 0.5s;
}

.searchBx.active .iconBx {
    left: 10px;
}

.header .profileBx .profile-photo {
    width: 48px;
    height: 48px;
}

.header .profileBx .profile-photo .photo {
    max-height: 100%;
    border: 1px solid #ddd;
    border-radius: 50%;
}
</style>
