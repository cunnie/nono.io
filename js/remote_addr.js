async function fetchIP(url, elementId) {
    const controller = new AbortController();
    const timeoutId = setTimeout(() => controller.abort(), 5000); // 5 second timeout

    try {
        const response = await fetch(url + '/remote_addr', { signal: controller.signal });
        if (!response.ok) throw new Error('Network response was not ok');
        const ip = await response.text();
        document.getElementById(elementId).innerText = ip;
    } catch (error) {
        console.error(`Error fetching ${elementId}:`, error);
    } finally {
        clearTimeout(timeoutId);
    }
}

// Run the detection once the DOM is ready
document.addEventListener('DOMContentLoaded', () => {
    fetchIP('https://ipv4.nono.io', 'ipv4');
    fetchIP('https://ipv6.nono.io', 'ipv6');
});
